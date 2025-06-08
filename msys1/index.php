<?php 
    $title = "Building NishBox using MSYS 1";
    include '../include/header.php';
?>

<!-- CONTENT -->
<h1>Building NishBox using MSYS 1</h1>
<p>
First, you need MSYS 1, which is mirrored <a href="http://a320.nishi.boats:8000/pgm/progs/devtools/compilers/MSYS-1.0.10.zip">here</a> - Thanks <a href="http://a320.nishi.boats">re9177</a>!!!<br>
You will have to install this manually - good luck
</p>
<p>
Second, since make included in MSYS 1 is way too old, you have to get <a href="https://gnuwin32.sourceforge.net/packages/make.htm">Make for Windows</a> from GnuWin32.
</p>
<p>
Third, you have to run premake5 with below arguments:
<pre>
	premake5 gmakelegacy --opengl=gdi --server=no --sound=winmm
</pre>
</p>
<p>
Fourth (optional), if you want release build, modify Makefile and change
<pre>
	config=debug_native
</pre>
to whatever you want.
</p>
<p>
Finally, copy <address>src/icon.ico</address> to top directory of nishbox, and simply run:
<pre>
	make
</pre>
</p>

<!-- END CONTENT -->
<?php include '../include/footer.php'; ?>
