#define img_x 23
#define img_y 1
#define img_width 80
#define img_height 48

#define text_x 64
#define text_y 61

#define icon_x 1
#define icon_y 49
#define icon_width 14
#define icon_height 14
#define icon_border 3

//set this on true if you want to conect to wifi
bool DATA_BASE_ON = false;

//set the wifi name and password
const char* ssid = "wifi name";
const char* password = "password";

//Your Domain name with URL path or IP address with path
const char* serverName = "http://IpAddress/API_pottedpal/api/update.php";

//time until next post sent in ms
unsigned long timerDelay = 5000;
