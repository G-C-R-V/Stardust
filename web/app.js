//camtodad de noticias que se van a cargar cuando se aprete siguiente
let cantidadNoticias = 5;//se mostraran 6
let pageInicial = 0;
let temaActual = "Casos";

let noticias = {
    "apiKey":"jcM2CY9m0tOolz4NI8gl2Qc0azNeXUA8ZYJyLVEK",
    fetchNoticias:function(categoria){
    fetch(
        "https://api.nasa.gov/neo/rest/v1/neo/3542519?api_key=DEMO_KEY"
    )
    }
}