//================================================
#ifndef _GAircraftAirbus_
#define _GAircraftAirbus_
//================================================
#include "GAircraft.h"
//================================================
class GAircraftAirbus : public GAircraft {
public:
    GAircraftAirbus();
    ~GAircraftAirbus();

public:
    void setName(const string &name);
    void print() const;
};
//================================================
#endif
//================================================
