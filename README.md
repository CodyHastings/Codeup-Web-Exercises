 # Codeup Web Exercises

 This is my personal repository of web exercises
 I've completed during my amazing time at Codeup!
 adding another line

 git filter-branch --commit-filter '
    export GIT_AUTHOR_NAME="Cody";
    export GIT_AUTHOR_EMAIL=cody@hastings.email;
    export GIT_COMMITTER_NAME="$GIT_AUTHOR_NAME";
    export GIT_COMMITTER_EMAIL=$GIT_AUTHOR_EMAIL;
    git commit-tree "$@"'