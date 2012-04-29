lyra-servermanager
==================

A *very* basic server monitor written soley in PHP for easy use on the majority of linux web servers. Just a quick and dirty internal project, fancied trying out github so here we are!

Features at the moment are only running a shell command and putting the output to a web page.

Also for the moment I've styled this with Transdmin Light by perspectived.com, might get around to styling it properly later.

The tool requires that PHP can do shell commands (exec() and the like), having this enabled IS a security concern so bear that in mind if you think people can get onto your server.

Also at the moment **there is no security** on getting onto the page, use http auth please!

Howto
-----
1.  Stick the files on you server
2.  Secure the directory (.htpasswd on apache etc)
3.  Have a look around
4.  Fiddle with report.php to configure your own commands with the format runDumbCommand(title,command);

runDumbCommand is the only useful feature yet.