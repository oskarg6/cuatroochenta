import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    connect() {
        this.load();
    }

    load() {
        this.getSensorTypeList().then((response) => {
            let list = '';
            response.data.forEach((sensorType) => {
                list += '<option value"'+sensorType.id+'">'+sensorType.name+'</option>';
            });

            this.element.innerHTML = list;
        });
    }

    getSensorTypeList() {
        return axios.get('/api/sensor-type');
    }
}