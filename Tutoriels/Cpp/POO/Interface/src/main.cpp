//===============================================
#include "GShapeRectangle.h"
#include "GShapeEllipse.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Interface\n\n";

    GShape* lShape = new GShapeRectangle(10, 5);
    GShape* lShape2 = new GShapeEllipse(10, 2);

    cout << "Rectangle Aire: " << lShape->area() << " (m2)\n";
    cout << "Rectangle Perimetre: " << lShape->perimeter() << " (m)\n";
    cout << "\n";

    cout << "Ellipse Aire: " << lShape2->area() << " (m2)\n";
    cout << "Ellipse Perimetre: " << lShape2->perimeter() << " (m)\n";
    cout << "\n";

    return 0;
}
//===============================================
