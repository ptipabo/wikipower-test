import React, { Component } from 'react'

class CatImg extends Component {
    
    state={
        cats: []
    }

    componentDidMount(){
        fetch('https://api.thecatapi.com/v1/images/search').then((response) => {
            //On converti les informations récupérées en json
            return response.json()
        }).then((result) => {
            //On copie le résultat dans le state "cats"
            this.setState({cats:result})
        })
    }    
    
    render() {
        return (
            <>
                {this.state.cats.map((value, index) => {
                    if(index === 0){
                        return (
                            <div className="catImg" key={index}>
                                <img src={value.url} />
                                <p>{value.id}</p>
                            </div>
                        )
                    }
                })}
            </>
        )
    }
}

export default CatImg
