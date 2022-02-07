import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    static targets = [ 'year', 'type', 'color', 'variety', 'temperature', 'graduation', 'ph', 'observations', 'wine', 'message' ];

    submit(event) {
        event.preventDefault();
        const year = this.yearTarget.value
        this.putMeasurement(
            this.yearTarget.value,
            this.typeTarget.value,
            this.colorTarget.value,
            this.varietyTarget.value,
            this.temperatureTarget.value,
            this.graduationTarget.value,
            this.phTarget.value,
            this.observationsTarget.value,
            this.wineTarget.value
        ).then(() => {
            this.messageTarget.innerHTML = 'the measurement '+ year +' has been created';
        });
    }

    putMeasurement(year, type, color, variety, temperature, graduation, ph, observations, wine) {
        return axios.put('/api/measurement', {
            year: year,
            type: type,
            color: color,
            variety: variety,
            temperature: temperature,
            graduation: graduation,
            ph: ph,
            observations: observations,
            wine: wine
        });
    }
}