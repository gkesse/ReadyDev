//===============================================
using System;
using System.Collections.Generic;
//===============================================
class GMain {
    static void Main(string[] args) {
        List<GAnimal> m_animalMap = new List<GAnimal>();
        m_animalMap.Add(new GCat());
        m_animalMap.Add(new GDog());
        m_animalMap.Add(new GDogRottweiler());
        m_animalMap.Add(new GDogLabrador());
        
        foreach(GAnimal m_animal in m_animalMap) {
            m_animal.Name();
        }
    }
}
//===============================================
