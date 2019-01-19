/* gtkled.h */

#ifndef __GTK_LED_H
#define __GTK_LED_H

#include <gtk/gtk.h>
#include <gtk/gtkwidget.h>


//G_BEGIN_DECLS


#define GTK_LED(obj) GTK_CHECK_CAST(obj, gtk_led_get_type (), GtkLed)
#define GTK_LED_CLASS(klass) GTK_CHECK_CLASS_CAST(klass, gtk_led_get_type (), GtkLedClass)
#define GTK_IS_LED(obj) GTK_CHECK_TYPE(obj, gtk_led_get_type ())

typedef struct _GtkLed GtkLed;
typedef struct _GtkLedClass GtkLedClass;

struct _GtkLed {
   GtkWidget widget;

   const gchar * on_image;
   const gchar * off_image;

   GdkPixbuf * on_pixbuf;
   GdkPixbuf * off_pixbuf;

   gint width;
   gint height;

   gboolean state;
};

struct _GtkLedClass {
   GtkWidgetClass parent_class;
};


GtkType gtk_led_get_type (void);
gboolean gtk_led_get_state (GtkLed * led);
void gtk_led_set_state (GtkLed * led, gboolean state);
GtkWidget * gtk_led_new (const gchar * on_image,
                         const gchar * off_image,
                         gboolean state);


//G_END_DECLS

#endif /* __GTK_LED_H */
