<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Forum De la cité</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  height: 100%;
  place-items: center;
  background: #f2f2f2;
  text-align: center;

}
.content{
    padding: 10%;
}
.container a{
    text-decoration: none;
    color: rgb(50, 126, 39) ;
    size: 40px;
}
.btn{
      right: 20px;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  border: none;
  padding: 12px 30px;
  border-radius: 6px;
  background-color: rgb(50, 126, 39);
  cursor: pointer;
    }

.container{

  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.card{

  min-height: 180px;
  max-width: 350px;
  margin: 0 20px;
  background: white;
  transition: 0.4s;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
  border-radius: 5%;
}
.card:hover{
  height: 470px;
  box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
}
.card .img{
  height: 200px;
  width: 100%;
}
.card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.card .top-text{
  padding: 5px;
}
.card .top-text .name{
  font-size: 25px;
  font-weight: 600;
  color: #202020;
}
.card .top-text p{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .bottom-text{
  padding: 0 20px 10px 20px;
  margin-top: 5px;
  background: white;
  opacity: 0;
  visibility: hidden;
  transition: 0.1s;
}
.card:hover .bottom-text{
  opacity: 1;
  visibility: visible;
}
.card .bottom-text .text{
  text-align: justify;
}
.card .bottom-text .btn{
  margin: 10px 0;
  text-align: left;
}
.card .bottom-text .btn a{
  text-decoration: none;
  background: #e74c3c;
  color: #f2f2f2;
  padding: 5px 8px;
  border-radius: 3px;
  display: inline-flex;
  transition: 0.2s;
}
.card .bottom-text .btn a:hover{
  transform: scale(0.9);
}
@media screen and (max-width: 978px) {
  .container{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .card{
    max-width: 700px;
    margin: 20px 0;
  }
}

.card-footer{
    border-top: 1px solid black;
    padding-top: 6%;
}
</style>
