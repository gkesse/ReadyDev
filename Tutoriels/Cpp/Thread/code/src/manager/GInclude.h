//================================================
#ifndef _GInclude_
#define _GInclude_
//================================================
#include <windows.h>
#include <winternl.h>
//================================================
typedef NTSTATUS(NTAPI* QEURYINFORMATIONPROCESS)(
        IN HANDLE ProcessHandle,
        IN PROCESSINFOCLASS ProcessInformationClass,
        OUT PVOID ProcessInformation,
        IN ULONG ProcessInformationLength,
        OUT PULONG ReturnLength OPTIONAL
        );
//================================================
#endif
//================================================
