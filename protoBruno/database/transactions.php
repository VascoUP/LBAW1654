<?
BEGIN;
  DELETE FROM ProjectCoordinator WHERE userID = ?;
  DELETE FROM ProjectUsers WHERE userID = ?;
  UPDATE UserSite SET userStatus = 'inactive' WHERE userID = ?;
COMMIT;

BEGIN;
DELETE FROM TagProject WHERE tagID = ?;
-- optional (the tag may exists) --
INSERT INTO Tag(name) VALUES(?);
INSERT INTO TagProject(tagID, projectID) VALUES(?,?);
COMMIT;

BEGIN;
  INSERT INTO Project(name, description, access, projectStatus) VALUES(?,?,?,?);
  -- optional (the tag may exists) --
  INSERT INTO Tag(name) VALUES(?);
  INSERT INTO TagProject(tagID, projectID) VALUES(?,?);
  INSERT INTO TagProject(tagID, projectID) VALUES(?,?);
  INSERT INTO ProjectCoordinator(userID, projectID, startDate, endDate, projectStatus) VALUES(?,?,?,?,?);
COMMIT;

BEGIN;
  INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus) VALUES(?,?,?,?,?,?);
  INSERT INTO TaskUser(taskID, userID) VALUES(?,?);
COMMIT;
?>