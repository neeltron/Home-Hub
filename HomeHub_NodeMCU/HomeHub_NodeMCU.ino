#include <Wire.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

const char* ssid = "Trikuldham";
const char* password = "jaihanuman1981";
int sensorValue;

void setup() {
  Serial.begin(9600);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print("Connecting..");
    delay(100);
  }
}
void loop() {
  sensorValue = analogRead(0);
  Serial.println(sensorValue, DEC);
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    http.begin("http://tangled.ae/homehub/index.php?air="+String(sensorValue));
    int httpCode = http.GET();
    if (httpCode > 0) {
      String payload = http.getString();
      Serial.println(payload);
    }
    http.end();
  }
  delay(10000);
}
