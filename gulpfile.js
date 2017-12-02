const gulp  = require('gulp');
const watch = require('gulp-watch');
const shell = require('gulp-shell');
const fs    = require('fs');
const debug = require('gulp-debug');

gulp.task('default', () => {
    gulp.watch('**/*.php', ['runtests']);
    
    fs.writeFile("autocommit_counter", "1", {flag: 'wx'}, () => {});
});


gulp.task(
    'runtests',
    shell.task(
        [
            'vendor/bin/phpspec run --no-code-generation',
            'git add src/ spec/',
            'git commit -m "Advent of Code 2017 TDD #`cat autocommit_counter`"',
            'count=`cat autocommit_counter` && let "count++" && echo $count > autocommit_counter'
        ]
    )
);