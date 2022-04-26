# BACKEND_rest

Realizzazione di un progetto di backend che ha la possibilità di fornire API in modo tale che il FRONTEND possa eseguire richieste HTTP

# Installazione <hr> 

Per permettere il corretto funzionamento del progetto è richiesto docker.
<ul>
  <li> Avviare il web server tramite docker con il seguente comando: </li> 
</ul>

<p>  -  docker run -d -p 8080:80 --name my-apache-php-app -v percorso_assoluto_cartella:/var/www/html                   zener79/php:7.4-apache
</p>


<ul>
  <li> Avviare il mysql-server con un volume per la persistenza dei dati del DBMS e un altro volume per accedere al file contenuto nella cartella dump. </li> 
</ul>

<p>
     -  docker run --name my-mysql-server -v percorso_assoluto_cartella/mysqldata:/var/lib/mysql -v                     percorso_assoluto_cartella/dump:/dump -e MYSQL_ROOT_PASSWORD=my-secret-pw -p 3306:3306 -d mysql:latest
</p>

<ul>
  <li> Comando per ottenere la bash dalla quale importare il dump: </li> 
</ul>

<p> -  docker exec -it my-mysql-server bash </p> 

<ul>
  <li> Comando per l'importazione del dump: </li> 
</ul>

<p> -  mysql -u root -p < /dump/create_employee.sql; exit;  </p> 

  
  # API References <hr> 
 
<h3> Chiamata che mostra una lista di impiegati </h3>

  -  GET /employees?page=${page}&size=${size} 

<table border = "1">
  <tr>
    <th> Parametro </th>
    <th> Tipo  </th>
    <th> Descrizione </th>
  </tr>
  
  <tr>
    <td> page </td>
    <td> int </td>
    <td> num pagina da mostrare </td>
  </tr>
  
  <tr>
    <td> size </td> 
    <td> int </td> 
    <td> num dell'impiegato da mostrare </td> 
  </tr>
  
  </table>
 
  
  <h3> Chiamata che mostra le informazioni di un singolo impiegato </h3>
    
     -   GET /employees?id=${id} 
  
  <table border = "1">
    <tr>
        <th> Parametro </th>
        <th> Tipo  </th>
        <th> Descrizione </th>
    </tr>
    
  <tr>
    <td> id </td> 
    <td> int </td> 
    <td> id dell'impiegato da mostrare </td> 
  </tr>
  
  </table>
  
  
  
   <h3> Rimozione di un impiegato dalla lista </h3>
    
     -  DELETE /employees?id=${id} 
     
    <table border = "1">
    
         <tr>
            <th> Parametro </th>
            <th> Tipo  </th>
            <th> Descrizione </th>
        </tr>
        
         <tr>
              <td> id </td> 
              <td> int </td> 
              <td> id dell'impiegato da mostrare </td> 
         </tr>
         
        
         
    </table>
    
    
    <h3>  Aggiunta di un impiegato alla lista </h3>
    
      -  POST / 
      
      viene richiesto un payload con i nuovi dati che vogliamo aggiungere al dipendente
      
      <hr>
      
      
    <h3>  Modifica delle informazioni di un impiegato: </h3>
    
        -   PUT /employees/${id}
        
        <table border = "1">
          
          <tr>
                <th> Parametro </th>
                <th> Tipo  </th>
                <th> Descrizione </th>
          </tr>
          
          
         <p> è richiesto un payload con i dati che vogliamo modificare del dipendente </p> 
        
        
  
    
