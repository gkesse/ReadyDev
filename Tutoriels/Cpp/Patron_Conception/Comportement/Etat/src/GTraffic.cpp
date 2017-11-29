//===============================================
#include "GTraffic.h"
#include "GTrafficA.h"
#include "GTrafficB.h"
//===============================================
GTraffic* GTraffic::Create(const string& traffic) {
    if(traffic == "TrafficA") {return new GTrafficA;}
    else if(traffic == "TrafficB") {return new GTrafficB;}
    return 0;
}
//===============================================
