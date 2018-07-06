USER=$1
PASSWORD=$2
shift; shift;
# Having shifted twice, the rest is now comments ...
COMMENTS=$@
echo "Adding user $USER ..."
echo useradd -c "$COMMENTS" $USER
echo passwd $USER $PASSWORD
echo "Added user $USER ($COMMENTS) with pass $PASSWORD"