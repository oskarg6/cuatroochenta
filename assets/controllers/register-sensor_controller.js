import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    static targets = [ 'name', 'value', 'type', 'message' ];

    submit(event) {
        event.preventDefault();
        const name = this.nameTarget.value
        this.putSensor(
            this.nameTarget.value,
            this.valueTarget.value,
            this.typeTarget.value
        ).then(() => {
            this.messageTarget.innerHTML = 'the sensor '+ name +' has been created';
        });
    }

    putSensor(name, value, sensorTypeId) {
        return axios.put('/api/sensor', {
            name: name,
            value: value,
            type: sensorTypeId
        });
    }
}