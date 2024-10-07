import 'package:flutter/material.dart';

void main(){
  runApp(MyApp());
}

class MyApp extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'SENA',
      home: Scaffold(
        appBar: AppBar(title: Text('SENA')),
        body: Column(
          children: [
            Text('ID: 2'),
            Text('Nombre: Brian'),
            Text('Username: Antonette'),
            Text('Email: hola123@gmail.com'),
            Text('Address:'),
            Text('Street: Victor plaints'),
            Text('Suite: Suite 879'),
            Text('City: Wisokyburgh'),
            Text('Zipcode: 90897565-771'),
            Text('Geo:'),
            Text('Lat: -43.987'),
            Text('Lng: -34-678'),
            Text('Phone: 010-692-190'),
            Text('Website: anastasia.net'),
            Text('Company:'),
            Text('Name: Deckow-Crist'),
            Text('CatchPhrase: Proactive didactic'),
            Text('Bs: synergyze scalable supply-chains'),
            ElevatedButton(onPressed: (){}, child: Text('BUSCAR')),
            Icon(
              Icons.favorite,
              color: Colors.pink,
              size: 24.0,
              semanticLabel: 'Text to announce in accesibilty mpdes',
            ),
            CircularProgressIndicator()
          ],


        )
        
        
         ),
    );
  }

}