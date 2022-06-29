import 'package:flutter/material.dart';
import 'package:webview_flutter/webview_flutter.dart';

class CatalogoHombre extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Catálogo Hombre"),
      ),
      body: SafeArea(
        child: Center(
          child: WebView(
            initialUrl: 'https://www.dportenis.mx/hombre-dportenis',
            javascriptMode: JavascriptMode.unrestricted,
          ),
        ),
      ),
    );
  }
}
