# Como conectarnos a la API

1. Nos registramos en la cuenta de la API de Marvel, se nos generará:

· Clave pública: a020ce7d08119889a71cafc466d8f631
<br>
. Clave privada: 3533266013cb4b99e4110dc35b3f47a9e62d28d4


2. Autenticación para aplicaciones del lado del servidor

Las aplicaciones del lado del servidor deben pasar dos parámetros además del parámetro apikey:
 <br>
ts : una marca de tiempo (u otra cadena larga que puede cambiar según cada solicitud)
hash : un resumen md5 del parámetro ts, su clave privada y su clave pública (por ejemplo, md5(+privateKey+publicKey))

3. Conectarnos a la API através de Postman

·GET: https://gateway.marvel.com:443/v1/public/characters?apikey=a020ce7d08119889a71cafc466d8f631&ts=1&hash=a129c8c5e95fd08289a4e463b78b7ab6

· apikey: a020ce7d08119889a71cafc466d8f631

· ts: 1

· hash: a129c8c5e95fd08289a4e463b78b7ab6
