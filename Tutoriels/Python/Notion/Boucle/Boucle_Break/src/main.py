#================================================
import msvcrt
#================================================
def quit():
    while True:
        print "Do you want to continue (Y/n)? ",
        c = ""
        c = msvcrt.getche()
        print
        c = c.lower()
        if c == "y" or c == "\r":
            return False
        elif c == "n":
            return True
#================================================
# x = a + b
#================================================
def addData():
    while True:
        a = raw_input("a: ")
        a = int(a)
        b = raw_input("b: ")
        b = int(b)
        x = a + b
        print "x: {}\n".format(x)
        if quit():
            break
        else:
            print
#================================================
print "\n### Add Data\n"
addData()
#================================================
