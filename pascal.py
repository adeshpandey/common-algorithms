import sys

n = int(sys.argv[1])
for i in range(1,n+1):
	c=1
	s=''
	for j in range(n-i-1):
		s+=" "
	print s
	s=''
	for k in range(1,n+1):
		s+=str(c)+" "
		c=c*(i-k)/k
	print s
	print "\n"