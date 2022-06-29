import 'package:flutter/material.dart';
import 'package:webview_flutter/webview_flutter.dart';

class CatalogoMujer extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Catálogo Mujer"),
      ),
      body: SafeArea(
        child: Center(
          child: WebView(
            initialUrl: 'https://www.dportenis.mx/mujer-dportenis',
            javascriptMode: JavascriptMode.unrestricted,
          ),
        ),
      ),
    );
  }
}
