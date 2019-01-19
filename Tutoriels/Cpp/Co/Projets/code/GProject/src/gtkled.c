/* gtkled.c */

#include "gtkled.h"


static void gtk_led_class_init (GtkLedClass * klass);
static void gtk_led_init (GtkLed * led);
static void gtk_led_load_image (GtkLed * led);
static void gtk_led_size_request (GtkWidget * widget,
                                  GtkRequisition * requisition);
static void gtk_led_size_allocate (GtkWidget * widget,
                                   GtkAllocation * allocation);
static void gtk_led_realize (GtkWidget * widget);
static gboolean gtk_led_expose (GtkWidget * widget,
                                GdkEventExpose * event);
static void gtk_led_paint (GtkWidget * widget);
static void gtk_led_destroy (GtkObject * object);


GtkType gtk_led_get_type (void)
{
   static GtkType gtk_led_type = 0;


   if (! gtk_led_type) {
      static const GtkTypeInfo gtk_led_info = {
         "GtkLed",
         sizeof (GtkLed),
         sizeof (GtkLedClass),
         (GtkClassInitFunc) gtk_led_class_init,
         (GtkObjectInitFunc) gtk_led_init,
         NULL,
         NULL,
         (GtkClassInitFunc) NULL
      };
      gtk_led_type = gtk_type_unique (GTK_TYPE_WIDGET, &gtk_led_info);
   }


   return gtk_led_type;
}


gboolean
gtk_led_get_state (GtkLed * led)
{
   return led->state;
}


void
gtk_led_set_state (GtkLed * led, gboolean state)
{
   led->state = state;
   gtk_led_paint (GTK_WIDGET (led));
}


GtkWidget *
gtk_led_new (const gchar * on_image,
             const gchar * off_image,
             gboolean state)
{
   GtkLed * led = NULL;


   if (on_image != NULL && off_image != NULL) {
      led = gtk_type_new (gtk_led_get_type ());

      if (led != NULL) {
         led->on_image = on_image;
         led->off_image = off_image;
         led->state = state;

         gtk_led_load_image (led);
      }
   }


   return GTK_WIDGET (led);
}


static void
gtk_led_class_init (GtkLedClass * klass)
{
   GtkWidgetClass * widget_class;
   GtkObjectClass * object_class;


   widget_class = (GtkWidgetClass *) klass;
   object_class = (GtkObjectClass *) klass;

   widget_class->realize = gtk_led_realize;
   widget_class->size_request = gtk_led_size_request;
   widget_class->size_allocate = gtk_led_size_allocate;
   widget_class->expose_event = gtk_led_expose;

   object_class->destroy = gtk_led_destroy;
}


static void
gtk_led_init (GtkLed * led)
{
   led->on_image = NULL;
   led->off_image = NULL;
   led->on_pixbuf = NULL;
   led->off_pixbuf = NULL;
   led->width = 0;
   led->height = 0;
   led->state = FALSE;
}


static void
gtk_led_load_image (GtkLed * led)
{
   led->on_pixbuf = gdk_pixbuf_new_from_file (led->on_image, NULL);
   led->off_pixbuf = gdk_pixbuf_new_from_file (led->off_image, NULL);
   led->width = gdk_pixbuf_get_width (led->on_pixbuf);
   led->height = gdk_pixbuf_get_height (led->on_pixbuf);
}


static void
gtk_led_size_request (GtkWidget * widget,
                      GtkRequisition * requisition)
{
   g_return_if_fail (widget != NULL);
   g_return_if_fail (GTK_IS_LED (widget));
   g_return_if_fail (requisition != NULL);

   requisition->width = GTK_LED (widget)->width;
   requisition->height = GTK_LED (widget)->height;
}


static void
gtk_led_size_allocate (GtkWidget * widget,
                       GtkAllocation * allocation)
{
   g_return_if_fail (widget != NULL);
   g_return_if_fail (GTK_IS_LED (widget));
   g_return_if_fail (allocation != NULL);


   widget->allocation = *allocation;

   if (GTK_WIDGET_REALIZED (widget)) {
      gdk_window_move_resize (
         widget->window,
         allocation->x, allocation->y,
         allocation->width, allocation->height
      );
   }
}


static void
gtk_led_realize (GtkWidget * widget)
{
   GdkWindowAttr attributes;
   guint attributes_mask;


   g_return_if_fail (widget != NULL);
   g_return_if_fail (GTK_IS_LED (widget));


   GTK_WIDGET_SET_FLAGS (widget, GTK_REALIZED);

   attributes.window_type = GDK_WINDOW_CHILD;
   attributes.x = widget->allocation.x;
   attributes.y = widget->allocation.y;
   attributes.width = widget->allocation.width;
   attributes.height = widget->allocation.height;
   attributes.wclass = GDK_INPUT_OUTPUT;
   attributes.event_mask = gtk_widget_get_events (widget) | GDK_EXPOSURE_MASK;

   attributes_mask = GDK_WA_X | GDK_WA_Y;

   widget->window = gdk_window_new (
      gtk_widget_get_parent_window (widget),
      & attributes, attributes_mask
   );

   gdk_window_set_user_data (widget->window, widget);

   widget->style = gtk_style_attach (widget->style, widget->window);
   gtk_style_set_background (widget->style, widget->window, GTK_STATE_NORMAL);
}


static gboolean
gtk_led_expose (GtkWidget * widget,
                GdkEventExpose * event)
{
   g_return_val_if_fail (widget != NULL, FALSE);
   g_return_val_if_fail (GTK_IS_LED (widget), FALSE);
   g_return_val_if_fail (event != NULL, FALSE);


   gtk_led_paint (widget);


   return FALSE;
}


static void
gtk_led_paint (GtkWidget * widget)
{
   GdkPixbuf * pixbuf = NULL;
   gint center_x = 0;
   gint center_y = 0;


   gdk_window_clear_area (
      widget->window,
      0, 0,
      widget->allocation.width,
      widget->allocation.height
   );


   center_x = (widget->allocation.width / 2) - (GTK_LED (widget)->width / 2);
   center_y = (widget->allocation.height / 2) - (GTK_LED (widget)->height / 2);


   if (GTK_LED (widget)->state)
      pixbuf = GTK_LED (widget)->on_pixbuf;
   else
      pixbuf = GTK_LED (widget)->off_pixbuf;


   gdk_pixbuf_render_to_drawable (
      pixbuf,
      GDK_DRAWABLE (widget->window),
      NULL,
      0, 0, center_x, center_y,
      GTK_LED (widget)->width, GTK_LED (widget)->height,
      GDK_RGB_DITHER_NORMAL, 1, 1
   );
}


static void
gtk_led_destroy (GtkObject * object)
{
   GtkLed * led;
   GtkLedClass * klass;


   g_return_if_fail (object != NULL);
   g_return_if_fail (GTK_IS_LED (object));


   led = GTK_LED (object);

   if (led->on_pixbuf != NULL && led->off_pixbuf != NULL) {
      gdk_pixbuf_unref (led->on_pixbuf);
      gdk_pixbuf_unref (led->off_pixbuf);

      led->on_pixbuf = NULL;
      led->off_pixbuf = NULL;
   }


   klass = gtk_type_class (gtk_widget_get_type ());

   if (GTK_OBJECT_CLASS (klass)->destroy) {
      (* GTK_OBJECT_CLASS (klass)->destroy) (object);
   }
}
