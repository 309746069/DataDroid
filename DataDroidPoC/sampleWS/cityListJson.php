<?php 
header ("content-type: text/json");
echo "{
    cities:{
        city:[
            {
				name:'Saint Herblain',
				postalCode:44800,
				countyNumber:44,
				countyName:'Loire Atlantique'
            },
            {
				name:'Cesson S�vign�',
				postalCode:35510,
				countyNumber:35,
				countyName:'Ille et Vilaine'
            }
        ]
    }
}";?>