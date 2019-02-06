
#include "vehicule.h"

G_DEFINE_TYPE (Vehicule, Vehicule, G_TYPE_OBJECT)

static void Vehicule_class_init (VehiculeClass *klass)
{
  g_return_if_fail (klass != NULL);
  g_type_class_add_private (klass, sizeof(VehiculePrivate));
}

static void Vehicule_init (Vehicule *self)
{
  g_return_if_fail (self != NULL);
}
