<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 
  <title> 500 | {{ config('admin.Admin_Title') }} </title> 

  <!---- Bootstrap Css -->
 <link rel="stylesheet" type="text/css" href="{{asset('/assets/adminTheme')}}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

      <h2>@lang('admin.warning')</h2> 
      <p>500</p>
      
    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
  *
  {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
  }
  body 
  {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #000;
  }
  section 
  {
    position: absolute;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2px;
    flex-wrap: wrap;
    overflow: hidden;
  }
  section::before 
  {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(#000,#ed0303,#000);
    animation: animate 5s linear infinite;
  }
  @keyframes animate 
  {
    0%
    {
      transform: translateY(-100%);
    }
    100%
    {
      transform: translateY(100%);
    }
  }
  section span 
  {
    position: relative;
    display: block;
    width: calc(6.25vw - 2px);
    height: calc(6.25vw - 2px);
    background: #181818;
    z-index: 2;
    transition: 1.5s;
  }
  section span:hover 
  {
    background: #ed0303;
    transition: 0s;
  }

  section .signin
  {
    position: absolute;
    width: 400px;
    background: #222;  
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    border-radius: 4px;
    box-shadow: 0 15px 35px rgba(0,0,0,9);
  }
  section .signin .content 
  {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 40px;
  }
  section .signin .content h2
  {
    font-size: 2em;
    color: #ed0303;
    text-transform: uppercase;
  }
  section .signin .content p
  {
    font-size: 20px;
    font-weight: bold;
    color: white;
    text-transform: uppercase;
  }
  section .signin .content .form 
  {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 25px;
  }
  section .signin .content .form .inputBox
  {
    position: relative;
    width: 100%;
  }
  section .signin .content .form .inputBox input 
  {
    position: relative;
    width: 100%;
    height: max-content;
    background: #333;
    border: none;
    outline: none;
    padding: 20px 20px 20px;
    border-radius: 4px;
    color: #fff;
    font-weight: 500;
    font-size: 1em;
  }
  section .signin .content .form .inputBox i 
  {
    position: absolute;
    left: 0;
    padding: 15px 10px;
    font-style: normal;
    color: #aaa;
    transition: 0.5s;
    pointer-events: none;
  }
  .signin .content .form .inputBox input:focus ~ i,
  .signin .content .form .inputBox input:valid ~ i
  {
    transform: translateY(-7.5px);
    font-size: 0.8em;
    color: #fff;
  }
  .signin .content .form .links 
  {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
  }
  .signin .content .form .links a 
  {
    color: #fff;
    text-decoration: none;
  }
  .signin .content .form .links a:nth-child(2)
  {
    color: #ed0303;
    font-weight: 600;
  }
  .signin .content .form .inputBox input[type="submit"]
  {
    padding: 10px;
    background: #ed0303;
    color: #000;
    font-weight: 600;
    font-size: 1.35em;
    letter-spacing: 0.05em;
    cursor: pointer;
  }
  input[type="submit"]:active
  {
    opacity: 0.6;
  }
  @media (max-width: 900px)
  {
    section span 
    {
      width: calc(10vw - 2px);
      height: calc(10vw - 2px);
    }
  }
  @media (max-width: 600px)
  {
    section span 
    {
      width: calc(20vw - 2px);
      height: calc(20vw - 2px);
    }
  }
</style>