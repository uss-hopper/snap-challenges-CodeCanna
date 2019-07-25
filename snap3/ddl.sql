ALTER DATABASE mwaid1 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS snap3;


CREATE TABLE snap3(
	 taskId BINARY(20) NOT NULL,
	 taskTitle VARCHAR(255) NOT NULL,
	 taskStartDate DATETIME NULL,
	 taskDueDate DATETIME NULL,
	 taskStatus VARCHAR(64) NOT NULL,
	 taskPriority VARCHAR(64) NOT NULL,
	 taskDescription VARCHAR(256) NULL,
	 PRIMARY KEY (taskId)
);

SELECT tweet.tweetContent, profile.profileAtHandle FROM tweet INNER JOIN `like` ON tweet.tweetId = like.likeTweetId
INNER JOIN profile ON like.likeProfileId = profile.profileId;