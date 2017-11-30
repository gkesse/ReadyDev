//===============================================
#include "GLogger.h"
#include "GDebugLogger.h"
#include "GEmailLogger.h"
#include "GErrorLogger.h"
//===============================================
int main(int argc, char** argv) {
    GLogger* m_logger = new GDebugLogger(GLogger::DEBUG);
    m_logger->setNext(new GEmailLogger(GLogger::EMAIL))
            ->setNext(new GErrorLogger(GLogger::ERROR));

    m_logger->message("Debug Message", GLogger::DEBUG);
    cout << "-------------------------------------------------\n";
    m_logger->message("Email Message", GLogger::EMAIL);
    cout << "-------------------------------------------------\n";
    m_logger->message("Error Message", GLogger::ERROR);
    cout << "-------------------------------------------------\n";
    return 0;
}
//===============================================
