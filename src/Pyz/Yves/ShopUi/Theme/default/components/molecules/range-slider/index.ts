import register from 'ShopUi/app/registry';
export default register('range-slider', () => import(/* webpackMode: "lazy" */'./range-slider'));
import 'nouislider/distribute/nouislider.css';
import './range-slider.scss';
