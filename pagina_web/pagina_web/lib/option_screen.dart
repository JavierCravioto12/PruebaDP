import 'package:pagina_web/catalogo_hombre.dart';
// import 'package:demo_webview/test_personalized_screen.dart';
import 'package:flutter/material.dart';
import 'package:pagina_web/catalogo_mujer.dart';

class OptionScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
          title: Text("                  Catálogo Deportenis "),
          backgroundColor: Color.fromARGB(255, 15, 79, 111)),
      body: Container(
        decoration: BoxDecoration(
            image: DecorationImage(
          image: AssetImage('images/imagen.jpg'),
          fit: BoxFit.cover,
        )),
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              SizedBox(
                height: 250.0,
                width: 350.0,
                child: Image.asset('images/deportenis.png'),
              ),
              FlatButton(
                onPressed: () {
                  Navigator.push(
                    context,
                    MaterialPageRoute(
                      builder: (BuildContext context) => CatalogoHombre(),
                    ),
                  );
                },
                shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.circular(20)),
                child: Text("       Catálogo Hombres       "),
                textColor: Colors.white,
                color: Color.fromARGB(255, 15, 60, 129),
              ),
              FlatButton(
                onPressed: () {
                  Navigator.push(
                    context,
                    MaterialPageRoute(
                      builder: (BuildContext context) => CatalogoMujer(),
                    ),
                  );
                },
                shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.circular(20)),
                child: Text("      Catálogo Mujeres      "),
                textColor: Colors.white,
                color: Color.fromARGB(255, 15, 60, 129),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
