import React, { Component } from 'react'
import ReactDOM from 'react-dom'

class InterestingProducts extends Component {
    render() {
        return (
            <div className="container">
                <p>Ceci est un test de composant REACT dans Laravel!</p>
            </div>
        )
    }
}

export default InterestingProducts

if(document.getElementById('reactRoot')){
    ReactDOM.render(<InterestingProducts />, document.getElementById('reactRoot'));
}