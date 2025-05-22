M4 = m4 -DDATE="`date`"
COM = m4/common.m4 m4/template.m4

.PHONY: all prepare
.SUFFIXES: .m4 .html

all: b/index.html

prepare:
	mkdir -p b

b/index.html: prepare index.m4 $(COM)
	$(M4) $(COM) index.m4 > $@
