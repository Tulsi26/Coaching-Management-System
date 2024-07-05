<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>

    <style>
        container {
    position: absolute;
    right: 0;
    width: 80vw;
    height: 100vh;
}

.container .header {
    position: fixed;
    top: 0;
    right: 0;
    width: 88vw;
    height: 10vh;
    background-color: bisque;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2)
}

.container.header.nav {
    width: 90%;
    display: flex;
    align-items: center;
}

.container.header.nav.search input {
    border: 1px;
    border-color: black;
    background: #331818;
    padding: 10px;
    width: 50%;
}

.container.header.nav.user {
    flex: 1;
    background: pink;
}
  </style> 
   
<body>
<table align="right" width=50% border=1>
    <tr>
 <td>
<div class="container">
<div class="header">
  <div class="nav">
    <div class="search">
      <input type="text" placeholder="search">
      <button type ="submit" >Search</button>
    </div>
    <div class="user">
      <a href="#"class="btn">ADD NEW</a>

</table>
</div>
</body>
</head>
</html>
