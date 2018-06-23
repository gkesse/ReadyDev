#================================================
def add(a, b):
    lData = a + b
    return lData
#================================================
def sub(a, b):
    lData = a - b
    return lData
#================================================
def mul(a, b):
    lData = a * b
    return lData
#================================================
def div(a, b):
    lData = a / float(b)
    return lData
#================================================
def mod(a, b):
    lData = a % b
    return lData
#================================================
if __name__ == "__main__":
    print "{0:25}: {1}".format("Addition (25 + 9)", add(25, 9))
    print "{0:25}: {1}".format("Addition (25 - 9)", sub(25, 9))
    print "{0:25}: {1}".format("Addition (25 * 9)", mul(25, 9))
    print "{0:25}: {1}".format("Addition (25 / 9)", div(25, 9))
    print "{0:25}: {1}".format("Addition (25 % 9)", mod(25, 9))
#================================================
