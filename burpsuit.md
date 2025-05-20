Se realiza una injection en una base de datos SQL se ingreso con "' or 1=1 -- ", colocando eso y cualquier contraseña el sistema me permitio ingresar como usuario admin. 


![alt text](image.png)
![alt text](image-1.png)
![alt text](image-2.png)
![alt text](image-3.png)


De igual manera se realizo reflected en la cual se hizo un boton que al dar click te redirije a youtube![alt text](image-4.png)
![alt text](image-5.png)

Posterior a ello se hizo un script para que al momento de ingresar en el blog me proporcione la ubicacion por medio de coordenadas
![alt text](image-6.png)
![alt text](image-7.png)

Tambien use un script para ver cual es la IP publica: 
![alt text](image-8.png)

<script>
fetch('https://api.ipify.org?format=json')
  .then(response => response.json())
  .then(data => {
    console.log("IP pública obtenida:");
    console.log(data.ip);
  })
  .catch(error => {
    console.error("Error obteniendo IP pública:", error.message);
  });
</script>


