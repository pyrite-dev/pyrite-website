M4 = m4 -DDATE="`date`"
COM = m4/common.m4 m4/template.m4

.PHONY: all
.SUFFIXES: .m4 .html

all: b/index.html

b:
	mkdir -p $@

b/index.html: b index.m4 $(COM)
	$(M4) $(COM) index.m4 > $@
