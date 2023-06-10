#!/bin/bash

#this script is used to retrieve sensor data from room B109

    #Database login information
    db_host="localhost"
    db_name="sae23"
    db_user="admin"
    db_password="patatesae23"

    #mosquitto_sub command to retrieve data
    mosquitto_sub -v -h mqtt.iut-blagnac.fr -t Student/by-room/B109/data | while read -r line
do
    #Extract date 
    date=$(date +"%Y-%m-%d")
    time=$(date +"%H:%M:%S")
  
  
    #Extract room name
    room=$(echo "$line" | awk -F'/' '{print $3}')

    #Extract temperature, humidity and co2 values
    temperature=$(echo "$line" | awk '{print $NF}' | awk -F',' '{print $1}' | sed 's/\[{//')
    humidity=$(echo "$line" | awk '{print $NF}' | awk -F',' '{print $2}')
    co2=$(echo "$line" | awk '{print $NF}' | awk -F',' '{print $3}')
    
    #Intermediate value
    temp=${temperature#\"temperature\":}
	hum=${humidity#\"humidity\":}
	co2=${co2#\"activity\":}

    
    #write all the data in recup.txt our logs file for all the sensors
    echo "Date du jour: $date"
    echo "Heure courante: $time"
    echo "Salle: $room"
    echo "Température: ${temperature#\"temperature\":}"
    echo "Humidité: ${humidity#\"humidity\":}"
    echo "CO2: ${co2#\"activity\":}"

    #Insert data in the database with mysql command

	mysql -u "$db_user" -p"$db_password" -h "$db_host" -e "USE $db_name; INSERT INTO Mesures (id_mes, Date, Time, Valeur, id_cap) VALUES (NULL, '$date', '$time', '$temp', '4');"
	
	mysql -u "$db_user" -p"$db_password" -h "$db_host" -e "USE $db_name; INSERT INTO Mesures (id_mes, Date, Time, Valeur, id_cap) VALUES (NULL, '$date', '$time', '$hum', '5');"
	
	mysql -u "$db_user" -p"$db_password" -h "$db_host" -e "USE $db_name; INSERT INTO Mesures (id_mes, Date, Time, Valeur, id_cap) VALUES (NULL, '$date', '$time', '$co2o', '6');"


done
