<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Itim', cursive;
        scroll-behavior: smooth;
    }

    .navbar .navbar-nav a{
        color: ffc107 !important;
    }

/* heading  */
    h1{
        font-family: 'Roboto', sans-serif;
        color: #ffc107!important;
    }

    h2{
        font-family: 'Krona One', sans-serif;
    }

/* message alert div  */
#msg{
    display: none;
}


/* animation for left image  // */
    .left_div img{
        animation:  zoom 5s linear infinite;
    }

@keyframes zoom{
    0%{
        transform: scale(0.75);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(0.75);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(0.75);
    }
    100%{
        transform: scale(0.75);
    }
}

    /* right side div  */
    .right_div h2{
        font-size: 3rem;
    }

    .spinning_virus img{
        animation: spin 3s linear infinite;
    }

    @keyframes spin {
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }


  .fa-arrow-alt-circle-up{
      font-size: 50px;
      position: sticky;
      right: 30px;
      bottom: 50px;
      color: #ffc107;
      cursor: pointer;
      transition: all ease 0.5s;

  }

  .fa-arrow-alt-circle-up:hover{
      color: green;
  }

  @media screen and (max-width:640)
  {
      h1{
          font-size: 30px !important;
      }
      h2{
          font-size: 24px !important;
      }
      h3{
          font-size: 18px !important;
      }
  }


</style>