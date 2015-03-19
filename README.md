peermagazine.com
================

News info and latest offerings from Peercoin and Peershares

HOW TO ADD AN ARTICLE?

First, you need to create article header (perex) - that will be viewed in RSS and on home page. Here, include an anchor to full article. To do this, create file articles/x , where x is number of article, must be following previous number. In its content, you can use full HTML. After title, you have to use tag <endtitle> for the engine to show it properly. Don't forget an anchor in the title like in the example. As an example files articles/0 and fullarticle/0 can be used.

Second, you need to create full article. Visitor will see it, when he will click your anchor from article description.
To do this, put your whole article content into file fullarticle/x, where x is the same number as in previous file. You have to use tags <articleheader> and <text>.

Last step is to make that public. Edit file lastarticle.dat and substitute current number by number of your article - x.
