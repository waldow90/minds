const Listr = require('listr');

module.exports.handler = async argv => {
  let renderer = 'default';

  if (argv.verbose) {
    renderer = 'verbose';
  } else if (argv.silent) {
    renderer = 'silent'
  }

  const tasks = new Listr([
    require('../tasks/shutdown'),
    require('../tasks/cleanup'),
    require('../tasks/provision-elasticsearch'),
    require('../tasks/minds-installer'),
    require('../tasks/shutdown'),
    require('../tasks/boot'),
  ], {
    renderer
  });

  await tasks.run();
};

module.exports.builder = {};
