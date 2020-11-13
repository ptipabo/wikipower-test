import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import CatImg from './CatImg'

class InterestingProducts extends Component {
    render() {

        const cats = []
        let i = 0;

        while(i<4){
            cats.push(<CatImg key={i} />)
            i++;
        }

        return (
            <div className="content">
                <div className="interestingProd">
                    <h2>Quels produits vous intéressent ?</h2>
                    <p>Laissez-vous guider vers l'offre la moins chère en fonction de vos besoins.</p>
                    <img src={'asset/images/woman-popcorn.png'} />
                </div>
                <div className="catApi-and-link">
                    <div className="catApi">
                        {cats}
                    </div>
                    <div id="interestingProd-links">
                        <a href="/packs" className="button btn-red">Trouver l'offre adéquate</a><br/>
                        <a className="basic-link" href="/contact-me" title="Rappel gratuit">Rappel gratuit</a>
                    </div>
                </div>
            </div>
        )
    }
}

export default InterestingProducts

if(document.getElementById('reactRoot')){
    ReactDOM.render(<InterestingProducts />, document.getElementById('reactRoot'));
}