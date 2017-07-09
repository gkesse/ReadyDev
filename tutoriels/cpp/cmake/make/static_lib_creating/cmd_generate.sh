cd build
cmake .. \
-G"Unix Makefiles" \
-DCMAKE_BUILD_TYPE=RELEASE \
-DCMAKE_C_COMPILER=gcc \
-DCMAKE_CXX_COMPILER=g++
cd ..