const placeInput = document.getElementById("place-input");

let map;
let autocomplete; 
let properties = [
    {
        id:1,
        nombre: "Universidad Autonoma Metropolitana",
        unidad: "Xochimilco" ,
        direccion: "xochimilco",
        coords: {
            lat: 19.30431976379559, 
            lng:-99.10304759199212 ,
            
        },
        
    },
    {
        id:2,
        nombre: "Universidad Autonoma Metropolitana",
        unidad: "Cuajimalpa" ,
        direccion: "Cuajimalpa",
        coords: {
            lat: 19.352266249702545,  
            lng:-99.28261490200354,
            
        }
    },
    {
        id:3,
        nombre: "Universidad Autonoma Metropolitana",
        unidad: "Azcapotzalco" ,
        direccion: "Azcapotzalco",
        coords: {
            lat: 19.503482640584703,   
            lng:-99.1870950784934,
            
        }
    },
    {
        id:4,
        nombre: "Universidad Autonoma Metropolitana",
        unidad: "Iztapalapa" ,
        direccion: "Iztapalapa",
        coords: {
            lat: 19.36270424402293, 
            lng:-99.0726258478122 
            
        }
    },
    {
        id:5,
        nombre: "Universidad Autonoma Metropolitana",
        unidad: "Lerma" ,
        direccion: "Lerma",
        coords: {
            lat: 19.291344487658005, 
            lng:-99.49799849199253 
            
        }
    },
    {
        id:6,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIME" ,
        direccion: "Ticoman",
        coords: {
            lat: 19.50935479285999,  
            lng:-99.13370770350856 
            
        }
    },
    {
        id:7,
        nombre: "Instituo Politecnico Nacional",
        unidad: "UPIBI" ,
        direccion: "",
        coords: {
            lat: 19.51579504580226, 
            lng:-99.12730161237798
            
        }
    },
    {
        id:8,
        nombre: "Instituto Politecnico Nacional",
        unidad: "UPIITA" ,
        direccion: "",
        coords: {
            lat: 19.51149104202388, 
            lng:-99.12656532169541
            
        }
    },
    {
        id:9,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ENCB" ,
        direccion: "",
        coords: {
            lat: 19.4532451183859, 
            lng:-99.17191694675437  
            
        }
    },
    {
        id:10,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIA" ,
        direccion: "",
        coords: {
            lat: 19.50494232089033, 
            lng:-99.13645729850877  
            
        }
    },
    {
        id:11,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIME" ,
        direccion: "Zacatenco",
        coords: {
            lat: 19.497625448336848, 
            lng:-99.13564622909733 
            
        }
    },
    {
        id:12,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIME" ,
        direccion: "Culhuacan",
        coords: {
            lat: 19.330052876249603, 
            lng: -99.11221440911005
            
        }
    },
    {
        id:13,
        nombre: "Instituto Politecnico Nacional",
        unidad: "UPIICSA" ,
        direccion: "",
        coords: {
            lat: 19.39588681382464,  
            lng:-99.09184378188685
            
        }
    },
    {
        id:14,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESCOM" ,
        direccion: "",
        coords: {
            lat: 19.50464171513346, 
            lng:-99.14633111488553 
            
        }
    },
    {
        id:15,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESFM" ,
        direccion: "",
        coords: {
            lat: 19.502757218156923, 
            lng:-99.13464424935907
            
        }
    },
    {
        id:16,
        nombre: "Instituto Politecnico Nacional",
        unidad: "UPIEM" ,
        direccion: "",
        coords: {
            lat: 19.498252824207977,
            lng: -99.14300087086
            
        }
    },
    {
        id:17,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIME" ,
        direccion: "Azcapotzalco",
        coords: {
            lat: 19.490478375315988, 
            lng:-99.17418638556747
            
        }
    },
    {
        id:18,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIA" ,
        direccion: "Ticoman",
        coords: {
            lat: 19.508300912770217, 
            lng:-99.13172873687522
            
        }
    },
    {
        id:19,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIT" ,
        direccion: "",
        coords: {
            lat: 19.500299641525736, 
            lng:-99.13278237479435
            
        }
    },
    {
        id:20,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESIA" ,
        direccion: "Tecamachalco",
        coords: {
            lat: 19.430309721598356, 
            lng:-99.23234012121394
            
        }
    },
    {
        id:21,
        nombre: "Instituto Politecnico Nacional",
        unidad: "CICS" ,
        direccion: "Milpa Alta",
        coords: {
            lat: 19.080735474638324, 
            lng:-98.95983807377497
            
        }
    },
    {
        id:22,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESEO" ,
        direccion: "",
        coords: {
            lat: 19.45346871454424, 
            lng:-99.17052000548095
            
        }
    },
    {
        id:23,
        nombre: "Instituto Politecnico Nacional",
        unidad: "CICS" ,
        direccion: "Santo Tomas",
        coords: {
            lat: 19.45472752501215, 
            lng:-99.16589789451756
            
        }
    },
    {
        id:24,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ENMyH" ,
        direccion: "",
        coords: {
            lat: 19.511820810414914, 
            lng:-99.13839083087204 
            
        }
    },
    {
        id:25,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESM" ,
        direccion: "",
        coords: {
            lat: 19.4510615495836, 
            lng:-99.16868832458616
            
        }
    },
    {
        id:26,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESCA" ,
        direccion: "Santo Tomas",
        coords: {
            lat: 19.453594263564604, 
            lng:-99.16782456315224
            
        }
    },
    {
        id:27,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESCA" ,
        direccion: "Tepepan",
        coords: {
            lat: 19.284467645471477, 
            lng:-99.14919037186793
            
        }
    },
    {
        id:28,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ENBA" ,
        direccion: "",
        coords: {
            lat: 19.512045763099582, 
            lng: -99.13262979076462
            
        }
    },
    {
        id:29,
        nombre: "Instituto Politecnico Nacional",
        unidad: "ESE" ,
        direccion: "",
        coords: {
            lat: 19.45449464784878, 
            lng:-99.1671903169802 
            
        }
    },
    {
        id:30,
        nombre: "Instituto Politecnico Nacional",
        unidad: "EST" ,
        direccion: "",
        coords: {
            lat: 19.51491735067671, 
            lng:-99.14081413105588
            
        }
    },
    {
        id:31,
        nombre: "Universidad Nacional Autonoma de Mexico ",
        unidad: "Rectoria" ,
        direccion: "CU",
        coords: {
            lat: 19.318919320530966,
            lng:-99.18437915713235
            
        }
    },
    {
        id:32,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "FES" ,
        direccion: "Acatlan",
        coords: {
            lat: 19.48388614277376, 
            lng:-99.24649737116435
            
        }
    },
    {
        id:33,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "FES" ,
        direccion: "Cuautitlan",
        coords: {
            lat: 19.69210568460073, 
            lng:-99.18972784455305
            
        }
    },
    {
        id:34,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "FES" ,
        direccion: "Iztacala",
        coords: {
            lat: 19.525456884593744, 
            lng:-99.18794933246
            
        }
    },
    {
        id:35,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "FES" ,
        direccion: "Zaragoza",
        coords: {
            lat: 19.382524330191913, 
            lng:-99.03834688942243 
            
        }
    },
    {
        id:36,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Arquitecturas" ,
        direccion: "C.U",
        coords: {
            lat: 19.330599303339763, 
            lng:-99.18729206658062
            
        }
    },
    {
        id:37,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Faculta de Arte y Diseño" ,
        direccion: "C.U",
        coords: {
            lat: 19.2523204853794, 
            lng:-99.11831890546375 
            
        }
    },
    {
        id:38,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Ciencias" ,
        direccion: "C.U",
        coords: {
            lat: 19.324279283025213, 
            lng:-99.17913177269195
            
        }
    },
    {
        id:39,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Faculta de Ciencias Politicas y Sociales" ,
        direccion: "C.U",
        coords: {
            lat: 19.318697066991508, 
            lng:-99.17812489989569
            
        }
    },
    {
        id:40,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Contaduria y Administracion" ,
        direccion: "C.U",
        coords: {
            lat: 19.32414936163516, 
            lng:-99.18463342273334
            
        }
    },
    {
        id:41,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Derecho" ,
        direccion: "C.U",
        coords: {
            lat: 19.33451854920692,  
            lng:-99.18500247604699
            
        }
    },
    {
        id:42,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Economia" ,
        direccion: "C.U",
        coords: {
            lat: 19.335025398321907, 
            lng:-99.18350231602003
            
        }
    },
    {
        id:43,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Filosofia y Letras" ,
        direccion: "C.U",
        coords: {
            lat: 19.334679634808978, 
            lng:-99.18694768741943 
            
        }
    },
    {
        id:44,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Ingenieria" ,
        direccion: "C.U",
        coords: {
            lat: 19.331082087340356, 
            lng:-99.18467213636768
            
        }
    },
    {
        id:45,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Medicina" ,
        direccion: "C.U",
        coords: {
            lat: 19.33313880678044,  
            lng:-99.18014524711757
            
        }
    },
    {
        id:46,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Medicina Veterinaria y Zooctenia" ,
        direccion: "C.U",
        coords: {
            lat: 19.329493287569992, 
            lng:-99.17731521568503 
            
        }
    },
    {
        id:47,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Musica" ,
        direccion: "C.U",
        coords: {
            lat: 19.353942060084908, 
            lng:-99.15382635486309
            
        }
    },
    {
        id:48,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Odontologia" ,
        direccion: "C.U",
        coords: {
            lat: 19.334663812305916, 
            lng:-99.18154309896111
            
        }
    },
    {
        id:49,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Psicologia" ,
        direccion: "C.U",
        coords: {
            lat: 19.335321841839637, 
            lng:-99.18878484584583
            
        }
    },
    {
        id:50,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Facultad de Quimica" ,
        direccion: "C.U",
        coords: {
            lat: 19.331255806695744, 
            lng:-99.18133490192535
            
        }
    },
    {
        id:51,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Escuela Nacional de Artes Cinematograficas" ,
        direccion: "C.U",
        coords: {
            lat: 19.31867034618782, 
            lng:-99.17570356479172
            
        }
    },
    {
        id:52,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Escuela Nacional de Ciencias de la Tierra" ,
        direccion: "C.U",
        coords: {
            lat: 19.32370362235143, 
            lng:-99.17574955798865
            
        }
    },
    {
        id:53,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Escuela Nacional de Enfermeria y Obstetricia" ,
        direccion: "C.U",
        coords: {
            lat: 19.291972778779495, 
            lng:-99.15119725085749 
            
        }
    },
    {
        id:54,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Escuela Nacional de de lenguas, lingüistica y Traduccion" ,
        direccion: "C.U",
        coords: {
            lat: 19.331512918281053, 
            lng:-99.18336324252229 
            
        }
    },
    {
        id:55,
        nombre: "Universidad Nacional Autonoma de Mexico",
        unidad: "Escuela Nacional de Trabajo Social" ,
        direccion: "C.U",
        coords: {
            lat: 19.32378965020011, 
            lng:-99.18692923370146
            
        }
    },
]


window.initMap = function (){
    fistPositionMap()

    let infoWindow = new google.maps.InfoWindow()

    const addMarker = (properties) =>{
        properties.forEach((propertie )=>{

            const informationCard = createInfoWindow(propertie)

            const marker = new google.maps.Marker({
                position:propertie.coords,
                map 
            });
            google.maps.event.addListener(marker, "click", ()=>{

                infoWindow.setContent(informationCard);
                infoWindow.open(map, marker);

                map.setCenter(propertie.coords);
                map.setZoom(14);
            });
        });
};
    addMarker(properties);
    searchGoogleMap();
};

const searchGoogleMap = () =>{
    autocomplete = new google.maps.places.Autocomplete(placeInput)
    autocomplete.addListener("place_changed", ()=>{
        const place = autocomplete.getPlace();
        map.setCenter(place.geometry.location);
        map.setZoom(15);
    })
}

const fistPositionMap = ()=>{
    const coords = {lat:19.352108498452186, lng: -99.28262888752941}

     map = new google.maps.Map(document.getElementById("map"),{
        zoom:10,
        center: coords,
     })
} 

document.getElementById('clear-btn').addEventListener('click', function() {
    document.getElementById('place-input').value = '';
    this.style.display = 'none'; // Ocultar el botón después de limpiar
});

document.getElementById('place-input').addEventListener('input', function() {
    const clearBtn = document.getElementById('clear-btn');
    if (this.value.length > 0) {
        clearBtn.style.display = 'block';
    } else {
        clearBtn.style.display = 'none';
    }
});

const createInfoWindow = (propertie)=>{
    return  `
    <div>
    <h3 class= "text-resert py-1">${propertie.nombre}</h3>
    <div class="d-flex justify-content-space-between">
    <p><b>Unidad: </b>${propertie.unidad}</p>
    <p><b>Direccion: </b>${propertie.direccion}</p>
    `;
};