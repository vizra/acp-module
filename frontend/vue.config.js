module.exports = {
  baseUrl: '/acp',

  outputDir: '../../../../../public/acp/',

  indexPath: process.env.NODE_ENV === 'production'
    ? '../../resources/views/index.blade.php'
    : 'index.html'
}