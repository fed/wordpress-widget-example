import React from 'react';
import styles from './App.css';
import logo from './logo.svg';

const App = () => (
  <section className={styles.app}>
    <div className={styles.header}>
      <img src={logo} className={styles.logo} alt="logo" />
      <h2>Wordpress React Widget</h2>
    </div>
    <p className={styles.intro}>
      Bacon ipsum dolor amet drumstick turducken biltong alcatra turkey. Turkey burgdoggen salami sirloin biltong. Tongue jowl ball tip ham meatball tenderloin tail kielbasa capicola short ribs leberkas pancetta shoulder ham hock. Bresaola kevin short loin ham shoulder venison.
    </p>
  </section>
);

export default App;
