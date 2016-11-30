Hello,

Thank you for downloading X-Treme 3D Carousel Menu XML application!

License

You are free to use the files inside the carousel_free.zip in any personal project as long as you don’t try to hide Flashtuning logo located in the top left corner of the carousel menu. If you don’t want to have the logo and also have acces to the fla source file, you must purchase the commercial package that is available on FlashTuning.net (http://www.flashtuning.net). If you want to use the 3d carousel menu in multiple websites you’ll have to purchase a license for each website. Read more on the X-Treme 3D Carousel Menu XML page. (http://www.flashtuning.net/flash-xml-menus-navigation/x-treme-3d-carousel-menu-xml-as2.html)



Note:

The options in the content xml file will override the ones defined in the settings xml, in the case of image min/max Height/Width and tooltip background alpha and color.
Also, FlashVars property takes priority over the "contentXML" property from the xml.

For FlashVars the properties that need to be set are "setupXML" and "contentXML". 
For example "setupXML=newSettings.xml&contentXML=newContent.xml", "setupXML=yourFolder/newSettings.xml", etc.


Known limitations:

    - If the mouse leaves the swf, AS2 reports, repeatedly, only the last mouse position. This behavior may cause some unnecessary roll over events in some circumstances.
      You can use the stageBorder property to create a virtual border zone where the mouse can be considered "out of stage". This will decrease the likelihood of reporting incorrect mouse positions.
    - 'Elastic' and 'Back' tween methods can go "off-graphic". This may result in unwanted rollout-rollover behavior.
       Regarding text box settings and text box tweening setting, all the general options are overridden if you define particular settings for each item.
     - Loading SWF animations may cause some issues regarding their dimensions. A simple workaround is drawing inside the swf, of an invisible rectangle as big as the stage
