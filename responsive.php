<style>

@media screen and (max-width:1350px){

    .categories{

        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .top-slider-con{
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        row-gap: 55px;
    }

    .cellular-grid{
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, 1fr);
        row-gap: 55px;
    }

}

@media screen and (max-width:1050px){

    .categories{
        
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .top-slider-con{
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        row-gap: 55px;
    }

    .cellular-grid{
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(4, 1fr);
        row-gap: 55px;
    }

}

@media screen and (max-width:850px){

.track-order{
    display: none;
}

.name{
    display: none;
}


.search-icon{
    top: 0px;
}

.searchbar-container{
    min-width: 30%;
    /* width: 30%; */
    /* display: none; */
}

}

@media screen and (max-width:698px){

.menu-section{
    display: flex;
    margin-left: 2%;

}

.menu-button{
    display:flex;
    justify-content: center;
    max-width: 30px;
    padding: 12px 15px;
    background-color: #E2D1F9;
    color: E2D1F9;
    border-radius: 10px;
}

.navigation{
    display: none;
}

.whish{
    display: none;
}

.searchbar-container{
    /* min-width: 30%; */
    display: inline;
    position: relative;
    width: 30%;
    /* display: none; */
}

.search{
    top:5px;
    right: -8px;
}

}



</style>