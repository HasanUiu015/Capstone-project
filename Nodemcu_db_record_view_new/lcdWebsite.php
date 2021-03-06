#ifndef header_h
#define header_h

String file1=
"<!DOCTYPE html>\r\n"
"<html lang=\"en\">\r\n"
"    <head>\r\n"
"        <meta charset=\"utf-8\">\r\n"
    
"    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">\r\n"
    
"    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">\r\n"
    
"    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">\r\n"
"        <title>ESP8266 Web Page Text to LCD </title>\r\n"
"        <script>\r\n"
"\r\n"
"        strLine1 = \"\";\r\n"
"        strLine2 = \"\";\r\n"
"        \r\n"
"        function SendText()\r\n"
"        {\r\n"
"            var request = new XMLHttpRequest();\r\n"
"            \r\n"
"            strLine1 = \"&L1=\" + document.getElementById(\"txt_form\").line1LCD.value;\r\n"
"            strLine2 = \"&L2=\" + document.getElementById(\"txt_form\").line2LCD.value;\r\n"
"            \r\n"
"            request.open(\"GET\", \"t\" + strLine1 + strLine2 + \"&/\", true);\r\n"
"            request.send(null);\r\n"
"        }\r\n"
"        </script>\r\n"
"    </head>\r\n"
"\r\n"
"    <body \">\r\n"
"  <nav class=\"navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm\">\r\n"
"      <div class=\"container\">\r\n"
"        <a href="" class=\"navbar-brand\">\r\n"
"          <span class=\"text-uppercase font-weight-bold\">Smart Lamppost</span>\r\n"
"       </a>\r\n"

"        <div id=\"navbarSupportedContent\" class=\"collapse navbar-collapse\">\r\n"
"          <ul class=\"navbar-nav ml-auto\">\r\n"
"            <li class=\"nav-item active\"><a href="" class=\"nav-link\">Home <span class=\"sr-only\">(current)</span></a></li>\r\n"
"          </ul>\r\n"
"       </div>\r\n"
"      </div>\r\n"
"  </nav>\r\n"
"        <h3><b>Enter text to send to LCD:</b></h3>\r\n"
"        <form id=\"txt_form\" name=\"frmText\">\r\n"
"            <label>Line 1: <input type=\"text\" name=\"line1LCD\" size=\"16\" maxlength=\"16\" /></label><br /><br />\r\n"
"            <label>Line 2: <input type=\"text\" name=\"line2LCD\" size=\"16\" maxlength=\"16\" /></label>\r\n"
"        </form>\r\n"
"        <br />\r\n"
"        <input type=\"submit\" value=\"Send Text\" onclick=\"SendText()\" />\r\n"
"    </body>\r\n"
"\r\n"
"</html>\r\n";

#endif