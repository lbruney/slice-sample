About
=========
This simple framework was created by Lisa-Ann Bruney to illustrate a stack of OO PHP, GulpJS, Jade and Stylus on the go. Of course, in a real life complex web application, things would not be so simple. Thus, architectural considerations must be made. Yet, for a brochure, one page site, this just might suffice. Might!
The PHP framework includes simple routing, site configuration and multilanguage support with dynamic variables.
The framework utilizes the popular MVC design pattern. Source PHP was written with Jade templating engine. The page is in some style with CSS, which was generated using the lovely Stylus tool.

Setup
=========

Load the directory and contents under some apache engine and point browser to the location. To update the template and CSS, install Node modules.

```
npm install -g jade stylus
cd $slice-sample-dir
npm install
# run gulp for file watching
gulp
```