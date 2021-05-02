# Home-Hub
Home Hub is a smart home notification dashboard powered by IoT based sensors as well as a cool web dashboard. Information including temperature, humidity, and air quality is collected and displayed on a web dashboard. Then, this data is used to make recommendations such as whether or not you should go outside (air quality) and what the fire danger is (temperature based). The web dashboard also features a light/dark mode for a good user experience.

## Hardware Needed and Costs

NodeMCU - US$8
MQ135 - US$2
DHT11 - US$3
Power Source - A Phone Charger will work, too!

Total Hardware Cost = US$13 or 16 CAD

## Hardware Setup

NodeMCU - MQ135

A0 - Data

3V3 - VCC

GND - GND


NodeMCU - DHT11

D4 - Data

3V3 - VCC

GND - GND


## Installation
Arduino IDE can be installed from <a href = "https://www.arduino.cc/en/software">this link</a>.

Setup for NodeMCU:
<ol>
  <li>Go to File >> Preferences and paste this url in additional Board Manager URLs: http://arduino.esp8266.com/stable/package_esp8266com_index.json</li>
  <li>Go to Tools>>Boards>>Board Manager.</li>
  <li>Type "ESP8266" in the search box.</li>
  <li>Select ESP8266 Community and click on install button.</li>
  <li>Go to Tools>>Boards>>select NodeMCU.</li>
  <li>Select proper COM port.</li>
</ol>

