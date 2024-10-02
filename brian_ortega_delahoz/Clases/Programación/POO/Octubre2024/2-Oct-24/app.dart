import 'dart:convert';
import 'dart:io';
import 'package:http/http.dart' as http;

class User {
  int? id;
  String? name;
  String? username;
  String? email;
  String? phone;
  String? website;
  Address? address;
  Company? company;

  User(var response) {
    Map<String, dynamic> map = jsonDecode(response);
    id = map['id'];
    name = map['name'];
    username = map['username'];
    email = map['email'];
    phone = map['phone'];
    website = map['website'];

    address = Address(map['address']);
    company = Company(map['company']);
  }
}

class Address {
  String? street;
  String? suite;
  String? city;
  String? zipcode;
  Geo? geo;

  Address(Map map) {
    street = map['street'];
    suite = map['suite'];
    city = map['city'];
    zipcode = map['zipcode'];

    geo = Geo(map['geo']);
  }
}

class Company {
  String? name;
  String? catchPhrase;
  String? bs;

  Company(Map map) {
    name = map['name'];
    catchPhrase = map['catchPhrase'];
    bs = map['bs'];
  }
}

class Geo {
  String? lat;
  String? lng;

  Geo(Map map) {
    lat = map['lat'];
    lng = map['lng'];
  }
}

void main() async {
  print("Ingrese el numero de usuario que desea solicitar");
  int num = int.parse(stdin.readLineSync()!);
  var url = Uri.https('jsonplaceholder.typicode.com', 'users/$num');
  print('Buscando...');
  var response = await http.get(url);
  print('Response status: ${response.statusCode}');

  if (response.statusCode == 200) {
    User usuario = User(response.body);
    print(usuario.address!.city);
    print(usuario.company!.bs);
  } else {
    print("El número de usuario no se ha encontrado");
  }
}
